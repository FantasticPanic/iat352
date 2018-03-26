<?php


require_once 'vendor/autoload.php'; // skip this if using a framework / autoloading elsewhere

use JasonRoman\NbaApi\Client\Client;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerBioStatsRequest;

$client = new Client();

$request = PlayerBioStatsRequest::fromArray([
    'perMode'          => 'PerGame',
    'leagueId'         => '00',
    'season'           => '2015-16',
    'seasonType'       => 'Regular Season',
    'poRound'          => 0,
    'outcome'          => null,
    'location'         => null,
    'month'            => 0,
    'seasonSegment'    => null,
    'dateFrom'         => null,
    'dateTo'           => null,
    'opponentTeamId'   => 0,
    'vsConference'     => null,
    'vsDivision'       => null,
    'teamId'           => 1610612745,
    'conference'       => null,
    'division'         => null,
    'gameSegment'      => null,
    'period'           => 0,
    'shotClockRange'   => null,
    'lastNGames'       => 0,
    'gameScope'        => 'Last 10',
    'playerExperience' => null,
    'playerPosition'   => null,
    'starterBench'     => null,
    'draftYear'        => null,
    'draftPick'        => null,
    'college'          => null,
    'country'          => null,
    'height'           => null,
    'weight'           => null,
]);

$response = $client->request($request);
//$responseBody = $response->getResponseBody();

//echo $responseBody;
/*use JasonRoman\NbaApi\Client\Client;
use JasonRoman\NbaApi\Request\Data\Prod\General\TodayRequest;

$client = new Client();

$request  = TodayRequest::fromArray();
$response = $client->request($request);


$arrayResponse = $response->getArrayFromJson();


$client = new Client(); // recommended

use JasonRoman\NbaApi\Client\Client;
use JasonRoman\NbaApi\Request\Stats\Stats\Game\PlayByPlayRequest;

$client  = new Client();
$request = PlayByPlayRequest::fromArray(['gameId' => '1234']);

try {
    $response = $client->request($request);
} catch (\Exception $e) {
    echo nl2br($e->getMessage());
}
*/
?>

