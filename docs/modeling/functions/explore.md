---
sidebar_position: 2   
title: explore
slug: /ace/explore
tags: []
---

Explores data by applying filters and aggregations.

### Syntax

 ```yaml
explore(<name>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| name | Text | The name or identifier. |

### Return values
Null


## Usage

Explores data by applying filters and aggregations.


```yaml
explore(orders, filter(orders.status = 'paid'), sum(orders.total_price))
```


### Related functions      
* [cross_filter](/ace/cross_filter)
* [create_relationship](/ace/create_relationship)
* [filter](/ace/filter)
* [calculate](/ace/calculate)
* [sum](/ace/sum)
* [count_x](/ace/count_x)
