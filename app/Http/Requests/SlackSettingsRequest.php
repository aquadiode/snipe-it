<?php

namespace App\Http\Requests;

class SlackSettingsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slack_endpoint'                      => 'url|required_with:slack_channel|starts_with:"https://hooks.slack.com"|nullable',
            'slack_channel'                       => 'required_with:slack_endpoint|starts_with:#|nullable',
            'slack_botname'                       => 'string|nullable',

            'discord_endpoint'                    => 'url|starts_with:"https://discordapp.com/api/webhooks/"|nullable',
            'discord_botname'                     => 'string|nullable',

            'msteams_endpoint'                    => 'url|regex:/https:\/\/(?:[\w\-\@\_]+\.)webhook\.office\.com\/webhookb2\/(?:[\w\-\@\_]+)\/IncomingWebhook\/(?:[\w\-\@\_]+)\/(?:[\w\-\@\_]+)/|nullable',
        ];
    }


}
