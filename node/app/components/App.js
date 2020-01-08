const React = require('react');
import Background from './Background.js';
import Title from './Title.js';
import DynamicMenuItem from './DynamicMenuItem.js';

class App extends React.Component {
  render() {
    return (
      <div>
        <Title image="veg_logo.png" name="The Grill" titleFont="typegrill" />
        <DynamicMenuItem  station="grill" />
        <Background type="grill" />
      </div>
    )}
  };
export default App;
