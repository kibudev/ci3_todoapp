<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
  if (is_array($todos) || is_object($todos)) :
    foreach ($todos as $todo) : ?>
      <li class="<?php if($todo->completed) {echo 'done';} ?>">

        <!-- Check -->
        <div>
          <a href="<?php  if($todo->completed){echo site_url("app/uncheck/$todo->id");} else {echo site_url("app/check/$todo->id");} ?>">
            <?php if($todo->completed) : ?>
              <i class="fa fa-check"></i>
            <?php endif; ?>
          </a>
        </div>

        <!-- Todo -->
        <div>
          <p><?php echo $todo->text; ?></p>
        </div>

        <!-- Buttons -->
        <div>
          <!-- Modify -->
          <a href="<?php echo site_url("app/todo/$todo->id"); ?>"><i class="fa fa-pencil"></i></a>
          <!-- Delete -->
          <a href="<?php echo site_url("app/destroy_todo/$todo->id"); ?>" class="delete-todo"><i class="fa fa-times"></i></a>
        </div>

      </li>

      <li class="attachment-form">
        <div>
          <form action="<?php echo site_url("app/new_attachment/$todo->id"); ?>" enctype="multipart/form-data" method="post">
            <input type="file" name="file" id="file">
            <button type="submit">Upload</button>
          </form>
        </div>
      </li>

      <?php if (isset($todo->attachments)) : ?>
      <ul>
        <?php foreach ($todo->attachments as $attachment) : ?>
        <li>

          <!-- View -->
          <div>
            <a href="<?php echo $this->config->item('assets')['attachments']?>/<?php echo $attachment->attachment . $attachment->type; ?>">
              <i class="fa fa-eye"></i>
            </a>
          </div>

          <!-- Filename -->
          <div>
            <p><?php echo $attachment->attachment . $attachment->type; ?></p>
          </div>

          <!-- Button -->
          <div>
            <!-- Delete -->
            <a href="<?php echo site_url("app/destroy_attachment/$attachment->idAttachment"); ?>">
              <i class="fa fa-times"></i>
            </a>
          </div>

        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>

    <?php endforeach; ?>
<?php endif; ?>
