<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Controller
 * @author Florian Dahlitz
 *
 * handles contact-page/form
 */
class Contact extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
    }
    
    public function index()
    {
        if($this->input->post('contact_submit'))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules([
                [
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Es muss ein %s eingegeben werden',
                        'min_length' => 'Der %s muss mindestens 8 Zeichen umfassen (Vor- und Nachname)'
                    ]
                ],
                [
                    'field' => 'subject',
                    'label' => 'Betreff',
                    'rules' => 'required|min_length[4]',
                    'errors' => [
                        'required' => 'Es muss ein %s eingegeben werden',
                        'min_length' => 'Der %s muss mindestens 4 Zeichen umfassen'
                    ]
                ],
                [
                    'field' => 'customer_email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Es muss eine valide (echte) %s eingegeben werden',
                        'valid_email' => 'Bitte geben Sie eine valide Email-Adresse ein'
                    ]
                ],
                [
                    'field' => 'text',
                    'label' => 'Text',
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                        'required' => 'Bitte geben Sie eine Nachricht ein',
                        'min_length' => 'Die Nachricht muss mindestens 10 Zeichen umfassen'
                    ]
                ]
            ]);
            
            if($this->form_validation->run())
            {
                $this->load->library('ReCaptcha_wrapper');                
                $this->config->load('secure');
                $recaptcha = new \ReCaptcha\ReCaptcha($this->config->item('recaptcha_secret_key'));
                $resp = $recaptcha->verify($this->input->post('g-recaptcha-response'), $this->input->server('remote_addr'));
                if ($resp->isSuccess()) {
                    if ($this->send()) {
                        $this->session->set_flashdata('email_send', true);
                        redirect(base_url('contact/thanks'));
                    } else {
                        $this->data['msg'] = '<p>Die Nachricht konnte nicht gesendet werden. 
                                Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.</p>';
                    }
                } else {
                    $this->data['msg'] ='<p>Bitte verifizieren Sie sich [reCaptcha]</p>';
                }
            }
            else
                $this->data['validation_errors'] = str_replace('</p>', '<br>', str_replace('<p>', '', validation_errors()));
        }
        
        $this->load->helper('form');
        
        $this->data['emails'] = $this->config->item('emails');
        
        $this->data['subview'] = 'contact';
        $this->load->view('layout', $this->data);
    }
    
    private function send()
    {
        $this->load->library('email');
        $this->config->load('secure');
        $this->email->initialize($this->config->item('email_settings'));
        
        $from = $this->input->post('customer_email');
        $to = $this->input->post('to_email');
        $to = (array_key_exists($to, $this->config->item('emails'))) ? $this->config->item('emails')[$to] : $this->config->item('emails')['Webmaster'];
        $name = ($this->input->post('name')) ? $this->input->post('name') : $from;
        
        $this->email->from($from, $name);
        $this->email->to($to);
        
        $this->email->subject($this->input->post('subject'));
        $this->email->message("INFO: Diese E-Mail wurde automatisch von der Homepage [fotoblog.venturedahlitz.com] erstellt [Kontaktformular]\r\n\r\n" . $name . " schrieb am " . date("d.m.Y") . ":\r\n\r\n" . $this->input->post('text') . "\r\n\r\nE-Mail Adresse des Absenders: " . $from . "\r\n\r\nBitte antworten Sie nicht auf diese E-Mail.");
        
        return $this->email->send();
    }
    
    public function thanks()
    {
        if(!$this->session->flashdata('email_send'))
            redirect(base_url());
        
        $this->data['subview'] = 'thanks';
        $this->load->view('layout', $this->data);
    }
}
