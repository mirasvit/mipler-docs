---
sidebar_position: 2   
title: quarter
slug: /ace/quarter
tags: [Date and Time]
---

Extracts the quarter from a date value.

### Syntax

 ```yaml
quarter(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date value to process. |

### Return values
Integer


## Usage

Extracts the quarter from the order creation date.


```yaml
quarter(orders.created_at)
```


### Related functions      
* [year](/ace/year)
* [weekday](/ace/weekday)
* [month](/ace/month)
* [week](/ace/week)
