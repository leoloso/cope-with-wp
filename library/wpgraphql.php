<?php
/**
 * Define WPGraphQL field "jsonencoded_blocks"
 */
add_action('graphql_register_types', function() {
  register_graphql_field(
    'Post',
    'jsonencoded_blocks',
    [
      'type'        => 'String',
      'description' => __('Post blocks encoded as JSON', 'wp-graphql'),
      'resolve'     => function($post) {
        $post = get_post($post->ID);
        $block_data = get_block_data($post->post_content);
        $block_metadata = get_block_metadata($block_data);
        return json_encode($block_metadata);
      }
    ]
  );
});
