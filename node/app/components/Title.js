const React = require('react');

class Title extends React.Component {
  render() {
    return (
      <div>
        <div className=`{this.props.image}`></div>
        <h1>{this.props.name}</h1>
      </div>
    )}
  };

export default Title;
