const React = require('react');
import Background from './Background.js';
import Title from './Title.js';
import DynamicMenuItem from './DynamicMenuItem.js';

class App extends React.Component {
  render() {
    return (
      <div>
        <Title image="" name="Deli" titleFont="typeddeli" />
        <DynamicMenuItem  station="deli" />
        <Background type="deli" />
      </div>
    )}
  };
export default App;
