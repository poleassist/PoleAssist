<!DOCTYPE html>

<?php
$arr_result = array(
    array(
        'title' => 'Accordion Item #1',
        'content' => '<strong>This is the first item\'s accordion body.</strong>'
    ),
    array(
        'title' => 'Accordion Item #2',
        'content' => '<strong>This is the second item\'s accordion body.</strong>'
    ),
    array(
        'title' => 'Accordion Item #3',
        'content' => '<strong>This is the third item\'s accordion body.</strong>'
    ),
);
?>

<div class="accordion" id="accordionExample">
    <?php for($i=0; $i<count($arr_result); $i++)  ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                <button class="accordion-button <?php echo ($i>0) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="<?php echo ($i==0) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $i; ?>">
                    <?php echo $arr_result[$i]['title']; ?>
                </button>
            </h2>
            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo ($i==0) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php echo $arr_result[$i]['content']; ?>
                </div>
            </div>
        </div>
    </div>

</html>