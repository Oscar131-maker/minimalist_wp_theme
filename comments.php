<!-- Comments -->
<section class="comment-section">
                <h5 class="comment-title">Comentarios... <?php comments_number('No hay comentarios', '1 comentario', '% comentarios'); ?></h5>

                <div class="comment-form">
                    <?php comment_Form(); ?>
                </div>

                <?php wp_list_comments(array(
                    'callback' => function($comment, $args, $depth) { ?>
                       
                 <div class="media d-flex flex-column mt-5">
                   <!-- Avatar -->
                   <div class="mr-3">
                      <?php if($args['avatar_size'] !=0) {
                        echo get_avatar($comment, $args['avatar_size']);
                      } ?>
                   </div>

                   <div class="media-body w-100">
                     <!-- User -->
                     <h5 class="mt-0">
                        <?php printf(__('<cite>%s</cite> <span>dice:</span>'), get_comment_author_link() ); ?>
                     </h5>

                     <!-- Comment Approved -->
                     <?php if($comment->comment_approved == '0') { ?>
                       <h6 class="comment-awaiting-moderation"><?php e_('Comentario en espera de aprobacion'); ?></h6>
                     <?php }?>
                     
                     <!-- Comment content -->
                     <?php comment_text(); ?>

                     <!-- Comment "Reply" & "Title" -->
                     <span class="reply">
                         <?php comment_reply_link(array_merge($args, array(
                             'reply_text' => 'Responder',
                             'depth' => $depth,
                             'max_depth' => $args['max_depth'],
                         ))); ?>
                     </span>

                      <span class="edit">
                          <?php edit_comment_link(__('Editar'), '', ''); ?>
                      </span>
                      <hr>
                   </div>

                   <?php } )); ?>

                </div>

              </section>
             <!-- Comments -->