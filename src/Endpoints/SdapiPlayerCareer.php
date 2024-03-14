<?php

namespace Sdapi\Endpoints;

use Sdapi\SdapiEndpoint;

class SdapiPlayerCareer extends SdapiEndpoint {

  protected string $feedName = 'playercareer';

  function getPlayerCareerDataForContestant(string $contestant_id): \stdClass {
    return $this->get([], ['ctst' => $contestant_id]);
  }

}
