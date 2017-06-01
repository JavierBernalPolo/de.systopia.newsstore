<?php
/**
 * @class Dummy Source for testing.
 */

class CRM_Newsstore_Dummy extends CRM_Newsstore {

  /**
   * holds values.
   */
  public static $raw_items;

  /**
   * Fetch and parse items from the source.
   *
   * @return array keyed by the URI. There are no restrictions on the type of values.
   */
  protected function fetchRawItems() {
    return static::$raw_items;
  }
}
