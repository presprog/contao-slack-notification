# Send notifications to your Slack Channel via Contao Notification center

This extension adds a Slack gateway to your [Contao](https://www.github.com/contao) installation with [Contao Notification Center](https://github.com/terminal42/contao-notification_center) by [terminal42](https://github.com/terminal42).

The Slack gateway lets you receive messages in your Teams Slack channel &ndash; just like Emails with the regular Email gateway, but who wants to receive more Emails anyways, right?

## Features
Currently this extension **supports standard messages**, i.e. you define a simple text message and you may use simple tokens to output form data. You may send these to any #channel or @username in your Slack team.

The more [advanced messages with attachements](https://api.slack.com/docs/message-attachments) will be part of a future release of this extension.

## How to setup
1. First you need to install this extension to your Contao CMS project:

    ```composer require presprog/contao-slack-notification```

    This will install the latest version of this extension, and &ndash; if not already installed &ndash; the Navigation Center itself. 

2. Second you need to setup a Slack webhook. Login to your Slack team admin page at your-team-domain.slack.com/admin and navigate to `Menu > Customize Apps > Custom Integrations > Incoming Webhooks`.

3. Add a new webhook and define its username, set an icon or emoji as avatar and select a default channel. You may overwrite channel and username later from within the Notification Center. Pay attention to the `webhook url` as you will need it in the next step.

4. Back to your Contao project, you need to add a Slack gateway. Most importantly, add the Webhook url from the previous step. Optionally, you may overwrite the default channel here. 

5. You can now use the Slack gateway in a notification, e.g. a new member registration, a form submission, a newsletter signup etc.

**Designed and built with ☕ and ❤ by [Present Progressive](https://www.presentprogressive.de)**