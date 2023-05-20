---
id: logs
title: Sending Logs
---

```curl
curl -X POST --data '{"origin": "app", "text": "This is a log message"}' 
https://laas-api.onrender.com/api/v1/logs

```

To store logs in LAAS, you can make use of the HTTP POST request to the '/logs' endpoint. The request body should be formatted as a JSON object, which includes the following fields:

`origin` (string, required): This field specifies the origin or source of the log within your application. It helps identify which part of your application the log is coming from.

`text` (string, required): The text field contains the actual log message itself. It provides a concise description of the event or message you want to log.

`level` (string, optional): The level field indicates the log level, which determines the severity or importance of the log. It can take one of the following values: `debug`, `info`, `warn`, `error`, or `emergency`. If not specified, the default log level is set to `info`.

`context` (object, optional): The context field is a JSON object that can hold additional information related to the log. It allows you to provide relevant contextual data associated with the log, such as request details or environment variables.
:::tip
You can also use the `context` field to send structured logs to LAAS. By including structured data in the `context` field, you can easily search and filter logs based on the structured data.
:::

`extra` (object, optional): The extra field is another JSON object that provides an avenue to include further supplementary information specific to the log. This can be any additional details or metadata that might be helpful for log analysis or troubleshooting purposes.

By including these fields and their respective values in the JSON request body, you can effectively send and store logs in LAAS. This enables you to have a structured and organized approach to log storage and retrieval, facilitating easier log analysis and problem resolution.

