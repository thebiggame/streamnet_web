<?php
namespace App\Helpers;
class RTMP
{
    public $channels = array();

    public function fetchChannels()
    {
        $this->lastUpdate = time();
        $this->channels = array();

        $rtmp = json_decode(json_encode((array) simplexml_load_file("http://localhost/stat.xml")), TRUE);

        if (array_key_exists("stream", $rtmp["server"]["application"][1]["live"])) {
            if (array_key_exists("name", $rtmp["server"]["application"][1]["live"]["stream"]))
            {
                $channel = $rtmp["server"]["application"][1]["live"]["stream"];

                if (empty($channel["name"])) { $channel["name"] = "default"; }
                $this->channels[$channel["name"]] = $channel;
                $this->channels[$channel["name"]]["recording"] = RTMP::isRecordingChannel($channel["name"]);
            }
            else
            {
                foreach ($rtmp["server"]["application"][1]["live"]["stream"] as $key => $channel)
                {
                    if (empty($channel["name"])) { $channel["name"] = "default"; }
                    $this->channels[$channel["name"]] = $channel;
                    $this->channels[$channel["name"]]["recording"] = RTMP::isRecordingChannel($channel["name"]);
                }
            }
        }
    }

    private static function isRecordingChannel($channelName)
    {
        return (count(glob("/var/tmp/rec/" .$channelName. "*.flv")) > 0);
    }
}