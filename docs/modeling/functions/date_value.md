---
sidebar_position: 2   
title: date_value
slug: /ace/date_value
tags: [Date and Time]
---

Converts a text string to a date value.

### Syntax

 ```yaml
date_value(<val>, <layout>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val | Text | The text string containing a date value to convert. |
| layout | Text | The date format pattern (optional). If not provided, common date formats are automatically detected. |

### Return values
Date


## Usage

Converts the text string '2024-01-15' to a date value.


```yaml
date_value("2024-01-15")
```


### Related functions      
* [date](/ace/date)
* [date_add](/ace/date_add)
* [date_diff](/ace/date_diff)
* [format](/ace/format)
