---
sidebar_position: 2   
title: month
slug: /ace/month
tags: [Date and Time]
---

Extracts the month from a date value.

### Syntax

 ```yaml
month(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date value to process. |

### Return values
Integer


## Usage

Extracts the month from the order creation date.


```yaml
month(orders.created_at)
```


### Related functions      
* [year](/ace/year)
* [weekday](/ace/weekday)
* [day](/ace/day)
* [week](/ace/week)
* [quarter](/ace/quarter)
