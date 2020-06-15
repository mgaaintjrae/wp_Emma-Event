<form action="<?= esc_url(home_url('/')) ?>" class="form-group form-search">
  <input type="search" placeholder="<?= __('Search post', 'emmaevent') ?>" name="s" value="<?= get_search_query() ?>">
  <button type="submit">
    <?= emmaevent_icon('search'); ?>
  </button>
</form>