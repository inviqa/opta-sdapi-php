<?php

namespace Sdapi;

abstract class SdapiEndpoint {

  const SDAPI_PAGE_SIZE = 999;

  /**
   * Sdapi client.
   *
   * @var \Sdapi\SdapiClient
   */
  private SdapiClient $client;

  /**
   * Feedname string eg. match.
   *
   * @var string
   */
  protected string $feedName;

  /**
   * SdapiMatch constructor.
   * @param \Sdapi\SdapiClient $client
   */
  function __construct(SdapiClient $client) {
    $this->client = $client;
  }

  /**
   * Add to default params.
   * @param array $params
   */
  function setParams(array $params): void {
    $this->client->setParams($params);
  }

  /**
   * Client call.
   *
   * @param array $filters
   * @param array $query
   * @return mixed
   */
  function get(array $filters = [], array $query = []): mixed {
    return $this->client->get($this->feedName, $filters, $query);
  }

}
