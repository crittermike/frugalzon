<?php

function frugalzon_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'views_exposed_form') {
    $form['title']['#attributes'] = array('placeholder' => 'Search');
  }
}
