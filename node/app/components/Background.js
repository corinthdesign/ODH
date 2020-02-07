const React = require('react');

class Background extends React.Component {
  render() {
    return (
      <div className={["background", this.props.type, {this.props.type + this.props.meal}].join(' ')}>
			</div>
    )}
  };

export default Background;
