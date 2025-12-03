---
sidebar_position: 2   
title: filter
slug: /ace/filter
tags: [Filter]
---

Returns a table that has been filtered.

### Syntax

 ```yaml
filter(<table>, <filter>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to be filtered. |
| filter | Boolean | A boolean (True/False) expression that is to be evaluated for each row of the table. |

### Return values
Table


## Usage

Returns orders where the discount equals 0.


```yaml
filter(orders, orders.discount == 0)
```


Returns customers who have never placed an order.


```yaml
filter(customers, is_empty(customers.last_ordered_at))
```


### Related functions      
* [calculate](/ace/calculate)
* [explore](/ace/explore)
* [all](/ace/all)
* [keep_filters](/ace/keep_filters)
* [cross_filter](/ace/cross_filter)
