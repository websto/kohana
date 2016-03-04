<div id="categories-4" class="widget">
<h2>Категории</h2>


    <ul id="nav" style="margin-top: -25px;">
            <?php

            function generate_menu($cat_menu, $level)
            {

                foreach($cat_menu[$level] as $id => $category)

                {   $str = Helper_MyUrl::SEOIt($category['category']);

                    echo '<li>'.HTML::anchor('/category/'.$id.'/'.$str, $category['category'], array('title' => $category['category'])) . ''."\n";

                    if(isset($cat_menu[$id]))
                    {
                        echo '<ul class="subs">'."\n";
                        generate_menu($cat_menu, $id);
                        echo '</ul></li>'."\n";
                    }
                }
            }

            $cat_menu = array();
            foreach($menu as $category)
            {
                $id = $category['id'];
                $cat_menu[$category['parent_id']][$id]['category'] = $category['category'];
            }

            generate_menu($cat_menu, 0);
            ?>
        </ul>

</div>
