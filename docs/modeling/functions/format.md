---
sidebar_position: 2   
title: format
slug: /ace/format
tags: [Date and Time]
---

Converts a value to text in the specified format.

### Syntax

 ```yaml
format(<date>, <layout>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | A date, or a formula that evaluates to a date value. |
| layout | Text | A date format that you specify. |

### Return values
Text


## Usage

Formats the order creation date as 'DD MM, YYYY'.


```yaml
format(orders.created_at, "DD MM, YYYY")
```


### Related functions      
* [date_value](/ace/date_value)
* [date](/ace/date)
* [year](/ace/year)
* [month](/ace/month)
* [day](/ace/day)
