<?php
// Get the group field (returns an array or false)
$clients_feedback_group = get_field('clients_feedback_group');

if ( $clients_feedback_group ) {
  // Extract subfields safely
  $clients_feedback_heading = ! empty( $clients_feedback_group['clients_feedback_heading'] )
    ? wp_strip_all_tags( $clients_feedback_group['clients_feedback_heading'] )
    : 'Нет заголовка.';

  $clients_feedback_paragraph = ! empty( $clients_feedback_group['clients_feedback_paragraph'] )
    ? wp_strip_all_tags( $clients_feedback_group['clients_feedback_paragraph'] )
    : 'Отсутствует параграф.';
} else {
  // Fallback text when group not found
  $clients_feedback_heading = 'Группа полей не оформлена.';
  $clients_feedback_paragraph = 'Поля ACF не найдены.';
}
?>
<h2><?php echo esc_html( $clients_feedback_heading ); ?></h2>
<p><?php echo esc_html( $clients_feedback_paragraph ); ?></p>