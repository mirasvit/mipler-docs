---
sidebar_position: 2   
title: left
slug: /ace/left
tags: [Text]
---

Returns the leftmost characters from a string.

### Syntax

 ```yaml
left(<text>, <len>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| text | Text | The text value to process. |
| len | Integer | The Len numeric value. |

### Return values
Text


## Usage

Returns the first 10 characters of the email address.


```yaml
left(orders.email, 10)
```


### Related functions      
* [right](/ace/right)
* [len](/ace/len)
* [str_pos](/ace/str_pos)
* [str_contains](/ace/str_contains)
