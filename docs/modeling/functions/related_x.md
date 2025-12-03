---
sidebar_position: 2   
title: related_x
slug: /ace/related_x
tags: [Filter]
---

Retrieves and aggregates related data from a related table.

### Syntax

 ```yaml
related_x(<table>, <column>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| column | any | The column to operate on. |

### Return values
Depends on input arguments.


## Usage

Calculates the sum of total prices from related orders for each customer.


```yaml
related_x(sum(orders.total_price), orders.customer_id = customers.id)
```


### Related functions      
* [related](/ace/related)
* [create_relationship](/ace/create_relationship)
* [cross_filter](/ace/cross_filter)
* [sum](/ace/sum)
* [count_x](/ace/count_x)
