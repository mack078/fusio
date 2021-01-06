<?php

namespace App\Tests\Api;

use App\Tests\HttpTestCase;

/**
 * TodoTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class TodoTest extends HttpTestCase
{
    public function testGet()
    {
        $response = $this->sendRequest('/todo', 'GET');

        $actual = (string) $response->getBody();
        $actual = preg_replace('/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}/', '0000-00-00 00:00:00', $actual);
        $expect = <<<JSON
{
    "totalResults": "31",
    "entry": [
        {
            "id": "1",
            "status": "1",
            "title": "Task 1",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "2",
            "status": "1",
            "title": "Task 2",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "3",
            "status": "1",
            "title": "Task 3",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "4",
            "status": "1",
            "title": "Task 4",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "5",
            "status": "1",
            "title": "Task 5",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "6",
            "status": "1",
            "title": "Task 6",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "7",
            "status": "1",
            "title": "Task 7",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "8",
            "status": "1",
            "title": "Task 8",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "9",
            "status": "1",
            "title": "Task 9",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "10",
            "status": "1",
            "title": "Task 10",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "11",
            "status": "1",
            "title": "Task 11",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "12",
            "status": "1",
            "title": "Task 12",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "13",
            "status": "1",
            "title": "Task 13",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "14",
            "status": "1",
            "title": "Task 14",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "15",
            "status": "1",
            "title": "Task 15",
            "insertDate": "0000-00-00 00:00:00"
        },
        {
            "id": "16",
            "status": "1",
            "title": "Task 16",
            "insertDate": "0000-00-00 00:00:00"
        }
    ]
}
JSON;

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }
}
