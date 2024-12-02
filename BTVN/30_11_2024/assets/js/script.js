//kiem tra neu trang reload
if (performance.getEntriesByType("navigation")[0]?.type === "reload") {
  window.location.href = "../../index.php?reload=1"; //nem tin hieu reload den php
}
