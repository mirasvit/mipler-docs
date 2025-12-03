---
sidebar_position: 2   
title: str_pos
slug: /ace/str_pos
tags: [Text]
---

Returns the position of a substring within a string.

### Syntax

 ```yaml
str_pos(<haystack>, <needle>, <offset>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| haystack | Text | The Haystack string value. |
| needle | Text | The Needle string value. |
| offset | Integer | The Offset numeric value. |

### Return values
Integer


## Usage

Returns the position of '@' in the email address.


```yaml
str_pos(orders.email, '@')
```


### Related functions      
* [str_contains](/ace/str_contains)
* [left](/ace/left)
* [right](/ace/right)
* [len](/ace/len)
