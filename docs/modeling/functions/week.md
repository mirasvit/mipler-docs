---
sidebar_position: 2   
title: week
slug: /ace/week
tags: [Date and Time]
---

Extracts the week number from a date value.

### Syntax

 ```yaml
week(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date value to process. |

### Return values
Integer


## Usage

Extracts the week number from the order creation date.


```yaml
week(orders.created_at)
```


### Related functions      
* [year](/ace/year)
* [weekday](/ace/weekday)
* [month](/ace/month)
* [day](/ace/day)
* [quarter](/ace/quarter)
