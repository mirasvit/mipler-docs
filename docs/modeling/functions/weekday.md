---
sidebar_position: 2   
title: weekday
slug: /ace/weekday
tags: [Date and Time]
---

Returns a number representing the day of the week of the date provided.

### Syntax

 ```yaml
weekday(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date for which to determine the day of the week. |

### Return values
Integer


## Usage

Returns the day of the week for the date.


```yaml
weekday(date(2022, 5, 12))
```


Returns the day of the week for the date.


```yaml
weekday(orders.processed_at)
```


### Related functions      
* [year](/ace/year)
* [month](/ace/month)
* [hour](/ace/hour)
* [day](/ace/day)
* [week](/ace/week)
