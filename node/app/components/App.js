const React = require('react');

class App extends React.Component {
  render() {
    return (
      <div>
        <a href="index.html" style="display: block; position: absolute; width: 50px; height: 50px; z-index: 200; cursor: default;"></a>
	  <!--Body-->
	  <section class="pizza_menu">
    		<h1>Pizza</h1>
    		<h1 style="line-height: 0.05em">Station</h1>
  			<div class="items">
  				<p>Cheese Pizza</p>
  				<p>Pepperoni Pizza</p>
				<!--Dynamic Menu Item-->
  				<p id="demo"></p>
			</div>
	</section>

<!--Video Background-->
<section class="background">
  <video autoplay muted loop>
    <source src="https://corinthdesign.com/private/HTML_menuboards/media/pizza.mp4" type="video/mp4 type="video/mp4">
  </video>
</section>

export default App;

