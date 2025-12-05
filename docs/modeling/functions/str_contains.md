---
sidebar_position: 2   
title: str_contains
slug: /ace/str_contains
tags: [Text]
---

Checks if a string contains a specified substring.

### Syntax

 ```yaml
str_contains(<withinText>, <findText>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| withinText | Text | The Withintext string value. |
| findText | Text | The Findtext string value. |

### Return values
Boolean


## Usage

Checks if the email address contains '@gmail.com'.


```yaml
str_contains(orders.email, '@gmail.com')
```


### Related functions      
* [str_replace](/ace/str_replace)
* [str_split](/ace/str_split)
* [str_pos](/ace/str_pos)
* [regexp_match](/ace/regexp_match)
* [in_array](/ace/in_array)
