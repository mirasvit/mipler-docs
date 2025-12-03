---
sidebar_position: 2   
title: user_agent
slug: /ace/user_agent
tags: [Text]
---

Parses user agent strings to extract browser and device information.

### Syntax

 ```yaml
user_agent(<userAgent>, <param>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| userAgent | Text | The user agent string to parse. |
| param | Text | The parameter name to extract. |

### Return values
Text


## Usage

Parses the user agent string to extract browser and device information.


```yaml
user_agent(orders.user_agent_string)
```


### Related functions      
* [str_contains](/ace/str_contains)
* [str_split](/ace/str_split)
* [json_path](/ace/json_path)
