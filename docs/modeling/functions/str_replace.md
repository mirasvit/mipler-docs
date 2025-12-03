---
sidebar_position: 2   
title: str_replace
slug: /ace/str_replace
tags: [Text]
---

Replaces occurrences of a substring within a string.

### Syntax

 ```yaml
str_replace(<text>, <old>, <new>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| text | Text | The text value to process. |
| old | Text | The Old string value. |
| new | Text | The New string value. |

### Return values
Text


## Usage

Replaces '@gmail.com' with '@company.com' in email addresses.


```yaml
str_replace(orders.email, '@gmail.com', '@company.com')
```


### Related functions      
* [str_contains](/ace/str_contains)
* [str_split](/ace/str_split)
* [str_pos](/ace/str_pos)
* [regexp_match](/ace/regexp_match)
