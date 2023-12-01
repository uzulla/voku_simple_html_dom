<?php

namespace Voku\Helper;

/**
 * Interface for SimpleHtmlDomNode
 *
 * @package Voku\Helper
 */
interface SimpleHtmlDomNodeInterface
{
  /**
   * Find list of nodes with a CSS selector
   *
   * @param string $selector
   * @param int    $idx
   *
   * @return SimpleHtmlDomNode[]|SimpleHtmlDomNode|null
   */
  public function find($selector, $idx = null);

  /**
   * Get html of Elements
   *
   * @return string
   */
  public function innerHtml();

  /**
   * Get plain text
   *
   * @return string
   */
  public function text();
}
