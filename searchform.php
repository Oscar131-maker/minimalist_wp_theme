<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
   <div class="form-group d-flex">
      <input type="search" class="form-control" 
      placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder', 'musicold' ); ?>"
      value="<?php echo get_search_query(); ?> " name="s" title="<?php echo esc_attr_x('Busqueda para:', 'label', 'musicold'); ?>">

      <button class="btn" type="submit">Buscar</button>
   </div>
</form>