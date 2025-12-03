---
sidebar_position: 2   
title: day
slug: /ace/day
tags: [Date and Time]
---

Extracts the day from a date value.

### Syntax

 ```yaml
day(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date value to process. |

### Return values
Integer


## Usage

Extracts the day from the order creation date.


```yaml
day(orders.created_at)
```


### Related functions      
* [weekday](/ace/weekday)
* [year](/ace/year)
* [month](/ace/month)
* [week](/ace/week)
