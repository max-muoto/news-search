# Capital One News Search Site
Successful Entry for the Capital One SWE Summit:

News Search is simple HTML page that uses jQuery and Bootstrap for the most part to access the NewsAPI feed. I call a PHP proxy page (to get around security and CORS releated issues) that fetches the JSON for me.
The project asks you to implemenent a search across specific categories (xxx, xxx, xxx). Unfortunately NewsAPI does not support filtering search results by categories, it only allows you to get a list of news sources based on category.
So in order to accomplish the goal, when the page loads I create 3 Javascript arrays of all news sources in each of the three categories. When a users does a search, I send NewsAPI a list of the sites (based on the category) that I want it to
return news articles from, thus achieving the same purpose. Results update if a users changes the categories and actually supports fetching news from multiple categories.
