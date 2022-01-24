<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    $main_paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus sapiente, voluptate ex beatae a fuga temporibus explicabo eveniet. Tempore est ab sed autem dolores sint sunt impedit assumenda omnis nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem tempora reprehenderit non odio harum, magni quibusdam itaque minus deserunt aut officia eum ducimus, porro et tenetur consectetur sint sapiente? Perspiciatis.';

    $sub_paragraphes = explode('.', $main_paragraph);

    var_dump($sub_paragraphes);
?>