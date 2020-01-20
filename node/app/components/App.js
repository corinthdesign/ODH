const React = require('react');
import Background from './Background.js';
import Title from './Title.js';
import DynamicMenuItem from './DynamicMenuItem.js';
import { getMeal } from './dynMenuEngine.js';

class App extends React.Component {
  render() {
    return (
      <div>
        <Title image="" name="Pizza Station" titleFont="typepiz" />
        <DynamicMenuItem  station="piz" />
        <Background type="piz" meal={getMeal()}/>
      </div>
    )}
  };
export default App;
