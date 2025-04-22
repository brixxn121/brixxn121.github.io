async function fetchNASAData() {
    const apiKey = 'DEMO_KEY'; 
    const apiUrl = `https://api.nasa.gov/planetary/apod?api_key=${apiKey}`;
  
    try {
      const response = await fetch(apiUrl);
      const data = await response.json();
  
      
      const imageElement = document.getElementById('nasa-image');
      const descriptionElement = document.getElementById('description');
  
      
      imageElement.src = data.url;
      imageElement.alt = 'Astronomy Picture of the Day';
      descriptionElement.textContent = data.explanation;
    } catch (error) {
      console.error('Error fetching NASA data:', error);
    }
  }
  
  
  fetchNASAData();
  