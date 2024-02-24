function performSearch() {
    showLoader();
    
    // Example AJAX call to fetch search results
    fetch('/search-results-endpoint')
      .then(response => response.json())
      .then(data => {
        // Process your data and update the DOM
        hideLoader();
      })
      .catch(error => {
        console.error('Search error:', error);
        hideLoader();
      });
  }

  
  function closeBanner() {
    document.getElementById('registerBanner').style.display = 'none';
}



  