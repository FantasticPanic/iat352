<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Charts;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\GameIdParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

class InfographicFanDuelPlayerRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/infographicfanduelplayer';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(GameIdParam::FORMAT)
     *
     * @var string
     */
    public $gameId;
}