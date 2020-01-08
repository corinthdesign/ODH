const React = require('react');
import { image } from './library.js';

class Title extends React.Component {
  render() {
    return (
      <div className={["titleImage", this.props.titleFont].join(' ')}>
        <img src={image(this.props.image)} />
        <h1>{this.props.name}</h1>
      </div>
    )}
  };

export default Title;
