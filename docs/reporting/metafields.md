---
title: Metafield Columns
sidebar_position: 2
---
Shopify metafields let you store custom data on products, variants, orders, customers, and product categories. Mipler can turn any of these metafields into a report column, without asking Support to add it for you.

### How it works

Mipler periodically scans your store for metafields. This scan only detects which metafields exist (their namespace and key) - it does not sync their values yet.

You can trigger a scan manually from **Settings → Store data → Metafields synchronization**:

<img src="/docs/img/reporting/metafields/s1_settings.png" />

**✅ Scan metafields**: Finds the metafields for the entities checked below. To use one, open a report, search its name under Manage Columns, and click Add as column.  
**✅ Products / Variants / Orders / Customers / Categories**: Which entities to scan (and later sync) metafields for.

### Adding a metafield as a column

1. Open any report and click **Manage Columns**.
2. Type the metafield's name (or part of it) in the search bar.
3. If a match is found, a card appears:

<img src="/docs/img/reporting/metafields/s2_search-match.png" />

4. Click **Add as column**. The column is created immediately and appears in the column list like any other column - check its box to add it to the report.

<img src="/docs/img/reporting/metafields/s3_toast.png" />

A toast confirms the column was created and reminds you to refresh the report tab to see it in the column picker:

> Column created. It's empty for now — values will appear once sync finishes. You will also need to refresh the tab.

### If nothing is found

If your search does not match any known metafield, you will see a generic message with a **Contact support** button instead:

<img src="/docs/img/reporting/metafields/s4_no-match.png" />

This can mean the metafield genuinely does not exist, or the periodic scan has not picked it up yet - try again later, or reach out to Support.

---

### Important Notes

- **Refresh the tab after adding a column.** The report tab needs a refresh before the new column shows up in the column picker.
- **Values may take time to appear.** Adding a metafield column automatically turns on synchronization for that entity if it was off. The column stays empty until that sync finishes - this can take a few minutes, longer for larger stores.
- **Scanning and syncing are different steps.** Scanning only detects which metafields exist. Synchronization is what pulls their actual values into your reports.
- **This does not replace the Metafields synchronization checkboxes.** You can still enable synchronization for an entity manually from **Settings → Store data**, before searching for any specific metafield.

---

If you have further questions or experience issues, contact **Support** through your Mipler account.
