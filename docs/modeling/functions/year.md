---
sidebar_position: 2   
title: year
slug: /ace/year
tags: [Date and Time]
---

Extracts the year from a date value.

### Syntax

 ```yaml
year(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date value to process. |

### Return values
Integer


## Usage

Extracts the year from the order creation date.


```yaml
year(orders.created_at)
```


### Related functions      
* [month](/ace/month)
* [weekday](/ace/weekday)
* [hour](/ace/hour)
* [day](/ace/day)
* [week](/ace/week)
* [quarter](/ace/quarter)
