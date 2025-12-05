---
sidebar_position: 2   
title: right
slug: /ace/right
tags: [Text]
---

Returns the rightmost characters from a string.

### Syntax

 ```yaml
right(<text>, <len>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| text | Text | The text value to process. |
| len | Integer | The Len numeric value. |

### Return values
Text


## Usage

Returns the last 10 characters of the email address.


```yaml
right(orders.email, 10)
```


### Related functions      
* [left](/ace/left)
* [len](/ace/len)
* [str_pos](/ace/str_pos)
* [str_contains](/ace/str_contains)
