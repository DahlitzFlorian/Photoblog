        <section id="main">
            <table>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($categories as $category): ?>
                        <?php if($i == 1): ?>
                            <tr>
                                <td><a href="<?php echo base_url('category/show/' . $category->id); ?>"><?php echo $category->name; ?></a></td>
                        <?php elseif($i == 2): ?>
                                <td><a href="<?php echo base_url('category/show/' . $category->id); ?>"><?php echo $category->name; ?></a></td>
                        <?php else: ?>
                                <td><a href="<?php echo base_url('category/show/' . $category->id); ?>"><?php echo $category->name; ?></a></td>
                            </tr>
                            <?php $i = 0; ?>
                        <?php endif; ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
