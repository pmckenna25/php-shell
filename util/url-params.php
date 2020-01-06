<?php
  $requestUri = basename($_SERVER['REQUEST_URI']);
  $url_components = parse_url($requestUri);
  parse_str($url_components['query'], $url_params);
?>