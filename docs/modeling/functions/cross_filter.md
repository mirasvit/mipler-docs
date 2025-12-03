---
sidebar_position: 2   
title: cross_filter
slug: /ace/cross_filter
tags: [Filter]
---

Applies filters across related tables.

### Syntax

 ```yaml
cross_filter(<leftTable>, <rightTable>, <filterType>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| leftTable | Table | The Lefttable table. |
| rightTable | Table | The Righttable table. |
| filterType | Text | The Filtertype string value. |

### Return values
Null


## Usage

Applies filters from orders to customers table based on customer_id relationship.


```yaml
cross_filter(orders, customers, orders.customer_id = customers.id)
```


### Related functions      
* [explore](/ace/explore)
* [create_relationship](/ace/create_relationship)
* [related](/ace/related)
* [related_x](/ace/related_x)
* [filter](/ace/filter)
