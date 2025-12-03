---
sidebar_position: 2   
title: regexp_match
slug: /ace/regexp_match
tags: [Text]
---

Matches a string against a regular expression pattern.

### Syntax

 ```yaml
regexp_match(<expr>, <pattern>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | Text | The expression to evaluate. |
| pattern | Text | The Pattern string value. |

### Return values
Text


## Usage

Matches the email address against a regular expression pattern.


```yaml
regexp_match(orders.email, '^[a-z]+@[a-z]+\\.com$')
```


### Related functions      
* [str_contains](/ace/str_contains)
* [str_replace](/ace/str_replace)
* [str_pos](/ace/str_pos)
